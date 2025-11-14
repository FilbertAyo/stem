<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Subject Details</h5>
                <a href="{{ route('subjects.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mb-3">{{ $subject->subject_name }}</h4>
                            
                            <div class="mb-3">
                                <strong>Description:</strong>
                                <p class="mt-2">{{ $subject->description ?? 'No description provided.' }}</p>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <strong>Display Order:</strong>
                                    <p class="mt-1">{{ $subject->display_order }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Status:</strong>
                                    <p class="mt-1">
                                        @if($subject->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3">
                                <strong>Created At:</strong>
                                <p class="mt-1">{{ $subject->created_at->format('F d, Y h:i A') }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Updated At:</strong>
                                <p class="mt-1">{{ $subject->updated_at->format('F d, Y h:i A') }}</p>
                            </div>

                            <div class="d-flex gap-2 mt-4">
                                <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-primary">
                                    <i class="ti ti-edit"></i> Edit Subject
                                </a>
                                <form action="{{ route('subjects.destroy', $subject) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subject?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="ti ti-trash"></i> Delete Subject
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-4">
                                <strong>Icon:</strong>
                                <div class="mt-2">
                                    @if($subject->icon_url)
                                        <img src="{{ Storage::url($subject->icon_url) }}" alt="Subject Icon" 
                                             class="img-thumbnail" style="max-width: 200px; max-height: 200px; width: 100%;">
                                    @else
                                        <p class="text-muted">No icon uploaded</p>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <strong>Image:</strong>
                                <div class="mt-2">
                                    @if($subject->image_url)
                                        <img src="{{ Storage::url($subject->image_url) }}" alt="Subject Image" 
                                             class="img-thumbnail" style="max-width: 100%; height: auto;">
                                    @else
                                        <p class="text-muted">No image uploaded</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>



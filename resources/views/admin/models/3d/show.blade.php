<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">3D Model Details</h5>
                <a href="{{ route('admin.models.3d.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mb-3">{{ $model3d->name }}</h4>
                            
                            <div class="mb-3">
                                <strong>Subject:</strong>
                                <p class="mt-1">{{ $model3d->subject->subject_name ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Description:</strong>
                                <p class="mt-2">{{ $model3d->description ?? 'No description provided.' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Tags:</strong>
                                <p class="mt-1">{{ $model3d->tags ?? 'No tags provided.' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>GLB File:</strong>
                                <div class="mt-2">
                                    @if($model3d->file)
                                        <a href="{{ asset('storage/' . $model3d->file) }}" 
                                           class="btn btn-sm btn-primary" 
                                           target="_blank">
                                            <i class="ti ti-download"></i> Download/View GLB File
                                        </a>
                                    @else
                                        <p class="text-muted">No file uploaded</p>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3">
                                <strong>Created At:</strong>
                                <p class="mt-1">{{ $model3d->created_at->format('F d, Y h:i A') }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Updated At:</strong>
                                <p class="mt-1">{{ $model3d->updated_at->format('F d, Y h:i A') }}</p>
                            </div>

                            <div class="d-flex gap-2 mt-4">
                                <a href="{{ route('admin.models.3d.edit', $model3d) }}" class="btn btn-primary">
                                    <i class="ti ti-edit"></i> Edit Model
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-4">
                                <strong>Thumbnail:</strong>
                                <div class="mt-2">
                                    @if($model3d->thumbnail)
                                        <img src="{{ asset('storage/' . $model3d->thumbnail) }}" 
                                             alt="Model Thumbnail" 
                                             class="img-thumbnail" 
                                             style="max-width: 100%; height: auto;">
                                    @else
                                        <p class="text-muted">No thumbnail uploaded</p>
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


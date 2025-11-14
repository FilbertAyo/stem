<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <h5 class="mb-3">Edit Subject</h5>
            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('subjects.update', $subject) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="subject_name" class="form-label">Subject Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('subject_name') is-invalid @enderror" 
                                   id="subject_name" name="subject_name" value="{{ old('subject_name', $subject->subject_name) }}" required>
                            @error('subject_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $subject->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            @if($subject->icon_url)
                                <div class="mb-2">
                                    <p class="mb-1">Current Icon:</p>
                                    <img src="{{ Storage::url($subject->icon_url) }}" alt="Current Icon" 
                                         class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('icon') is-invalid @enderror" 
                                   id="icon" name="icon" accept="image/*">
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload a new icon to replace the current one (jpeg, png, jpg, gif, svg). Max size: 2MB</small>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if($subject->image_url)
                                <div class="mb-2">
                                    <p class="mb-1">Current Image:</p>
                                    <img src="{{ Storage::url($subject->image_url) }}" alt="Current Image" 
                                         class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload a new image to replace the current one (jpeg, png, jpg, gif, svg). Max size: 2MB</small>
                        </div>

                        <div class="mb-3">
                            <label for="display_order" class="form-label">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', $subject->display_order) }}" 
                                   min="0">
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Lower numbers appear first. Default: 0</small>
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" 
                                       value="1" {{ old('is_active', $subject->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active
                                </label>
                            </div>
                            <small class="form-text text-muted">Uncheck to make this subject inactive</small>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-check"></i> Update Subject
                            </button>
                            <a href="{{ route('subjects.index') }}" class="btn btn-secondary">
                                <i class="ti ti-x"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>


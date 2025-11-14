<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <h5 class="mb-3">Edit 3D Model</h5>
            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.models.3d.update', $model3d) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="subject_id" class="form-label">Subject <span class="text-danger">*</span></label>
                                <select class="form-select @error('subject_id') is-invalid @enderror" 
                                        id="subject_id" name="subject_id" required>
                                    <option value="">Select a subject</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}" 
                                                {{ old('subject_id', $model3d->subject_id) == $subject->id ? 'selected' : '' }}>
                                            {{ $subject->subject_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('subject_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Model Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', $model3d->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="file" class="form-label">GLB File</label>
                                @if($model3d->file)
                                    <div class="mb-2">
                                        <p class="mb-1">Current File:</p>
                                        <a href="{{ asset('storage/' . $model3d->file) }}" 
                                           target="_blank" 
                                           class="btn btn-sm btn-info">
                                            <i class="ti ti-download"></i> View Current File
                                        </a>
                                    </div>
                                @endif
                                <input type="file" class="form-control @error('file') is-invalid @enderror" 
                                       id="file" name="file" accept=".glb">
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Upload a new GLB file to replace the current one. Max size: 100MB</small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                @if($model3d->thumbnail)
                                    <div class="mb-2">
                                        <p class="mb-1">Current Thumbnail:</p>
                                        <img src="{{ asset('storage/' . $model3d->thumbnail) }}" 
                                             alt="Current Thumbnail" 
                                             class="img-thumbnail" 
                                             style="max-width: 200px; max-height: 200px;">
                                    </div>
                                @endif
                                <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" 
                                       id="thumbnail" name="thumbnail" accept="image/*">
                                @error('thumbnail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Upload a new thumbnail to replace the current one (jpeg, png, jpg, gif, webp). Max size: 5MB</small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $model3d->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags (Keywords)</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" 
                                   id="tags" name="tags" value="{{ old('tags', $model3d->tags) }}" 
                                   placeholder="e.g., anatomy, biology, interactive, 3d">
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Enter comma-separated keywords for searchability</small>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-check"></i> Update 3D Model
                            </button>
                            <a href="{{ route('admin.models.3d.index') }}" class="btn btn-secondary">
                                <i class="ti ti-x"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>


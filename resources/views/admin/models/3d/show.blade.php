<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">3D Model Details</h5>
                <a href="{{ route('admin.models.3d.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i> Back to List
                </a>
            </div>

            @if($model3d->file)
                <!-- 3D Model Viewer - Full Width -->
                <div class="card mb-4">
                    <div class="card-body p-0" style="position: relative;">
                        <div id="model-loading" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; z-index: 10; background: rgba(245, 245, 245, 0.9); padding: 20px; border-radius: 8px;">
                            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mt-3 mb-0">Loading 3D Model...</p>
                        </div>
                        <model-viewer
                            id="model-viewer"
                            src="{{ asset('storage/' . $model3d->file) }}"
                            alt="{{ $model3d->name }}"
                            auto-rotate
                            camera-controls
                            touch-action="pan-y"
                            shadow-intensity="1"
                            style="width: 100%; height: 600px; background: #f5f5f5;"
                        ></model-viewer>
                    </div>
                </div>
            @endif

            <!-- Model Details -->
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
                                            <i class="ti ti-download"></i> Download GLB File
                                        </a>
                                    @else
                                        <p class="text-muted">No file uploaded</p>
                                    @endif
                                </div>
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

    @if($model3d->file)
        @once
            @push('scripts')
                <script
                    type="module"
                    src="https://unpkg.com/@google/model-viewer@3.3.0/dist/model-viewer.min.js"
                ></script>
            @endpush
        @endonce

        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const modelViewer = document.getElementById('model-viewer');
                    const loadingSpinner = document.getElementById('model-loading');

                    if (modelViewer && loadingSpinner) {
                        // Hide loading spinner when model is loaded
                        modelViewer.addEventListener('load', function() {
                            loadingSpinner.style.display = 'none';
                        });

                        // Show error message if loading fails
                        modelViewer.addEventListener('error', function() {
                            loadingSpinner.innerHTML = '<p class="text-danger mb-0">Error loading 3D model. Please try again.</p>';
                        });
                    }
                });
            </script>
        @endpush
    @endif

</x-admin-layout>

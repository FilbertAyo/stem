<x-admin-layout>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">3D Models Management</h5>
                <a href="{{ route('admin.models.3d.create') }}" class="btn btn-primary">
                    <i class="ti ti-plus"></i> Add New 3D Model
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card tbl-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Tags</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($model3ds as $model)
                                    <tr>
                                        <td>{{ $model->id }}</td>
                                        <td>{{ $model->name }}</td>
                                        <td>{{ $model->subject->subject_name ?? 'N/A' }}</td>
                                        <td>{{ Str::limit($model->description ?? 'N/A', 50) }}</td>
                                        <td>{{ Str::limit($model->tags ?? 'N/A', 30) }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.models.3d.show', $model) }}"
                                                   class="btn btn-sm btn-info"
                                                   title="View Details">
                                                    <i class="ti ti-eye"></i> View
                                                </a>
                                                <a href="{{ route('admin.models.3d.edit', $model) }}"
                                                   class="btn btn-sm btn-primary"
                                                   title="Edit">
                                                    <i class="ti ti-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('admin.models.3d.destroy', $model) }}"
                                                      method="POST"
                                                      class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this 3D model? This will also delete the GLB file and thumbnail. This action cannot be undone.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger"
                                                            title="Delete">
                                                        <i class="ti ti-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No 3D models found. <a href="{{ route('admin.models.3d.create') }}">Create one now</a>.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>

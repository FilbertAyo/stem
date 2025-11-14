<x-admin-layout>

    <!-- its template of how the rest of pages should look like on admin side -->
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Subjects Management</h5>
                <a href="{{ route('subjects.create') }}" class="btn btn-primary">
                    <i class="ti ti-plus"></i> Add New Subject
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
                                    <th>Subject Name</th>
                                    <th>Description</th>
                                    <th>Display Order</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->subject_name }}</td>
                                        <td>{{ Str::limit($subject->description ?? 'N/A', 50) }}</td>
                                        <td>{{ $subject->display_order }}</td>
                                        <td>
                                            @if($subject->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('subjects.show', $subject) }}" class="btn btn-sm btn-info" title="View Details">
                                                    <i class="ti ti-eye"></i> View
                                                </a>
                                                <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-sm btn-primary" title="Edit">
                                                    <i class="ti ti-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('subjects.destroy', $subject) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subject?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="ti ti-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No subjects found. <a href="{{ route('subjects.create') }}">Create one now</a>.</td>
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

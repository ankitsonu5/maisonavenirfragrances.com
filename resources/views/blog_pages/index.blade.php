<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Blog Pages</h1>
        <a href="{{ route('blog_pages.create') }}" class="btn btn-primary mb-3">Create New Blog Page</a>

        @if($blogPages->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogPages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>
                                <a href="{{ route('blog_pages.show', $page->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('blog_pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('blog_pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            {{ $blogPages->links() }}
        @else
            <p class="text-center">No blog pages found. Create a new one!</p>
        @endif
    </div>
</body>
</html>

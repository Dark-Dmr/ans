<form action="{{ route('store.content') }}" method="POST" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="title">Content Title</label>
        <input type="text" class="form-control" name="tittle">
    </div>
    <div class="form-group m-3">
        <label for="text">Content Text</label>
        <textarea class="form-control" name="text" rows="3"></textarea>
    </div>

    <label>Select Categories:</label>
    <div>
        @foreach ($categories as $category)
            <div>
                <label>
                    <input type="checkbox" name="categories_id[]" value="{{ $category->id }}">
                    {{ $category->name }}
                </label>
            </div>
        @endforeach
    </div>
    

    

    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

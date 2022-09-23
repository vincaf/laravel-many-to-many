<div class="mb-3">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title', $post->title) }}"
        required>
    @error('title')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="input-post_content" class="form-label">Content</label>
    <textarea class="form-control" id="input-post_content" cols="30" rows='5' name="post_content" required>{{ old('post_content', $post->post_content) }}</textarea>
    @error('post_content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="input-post_image" class="form-label">Image</label>
    <input type="text" class="form-control" id="input-post_image" name="post_image"
        value="{{ old('post_image', $post->post_image) }}" required>
    @error('post_image')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="text-center mt-5">
    <button type="submit" class="btn btn-primary btn-lg">UPDATE AND SAVE</button>
</div>
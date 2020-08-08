<div class="form-group mx-2 mt-2">
    <label for="title">Thumbnile</label>
    <input type="file" class="form-control" id="thumbnile" name="thumbnile"  >
  </div>
  <div class="form-group mx-2 mt-2">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  value="{{ old('title') ?? $post->title }}">
      @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mx-2 mt-2">
      <label for="category">Category</label>
      <select class="form-control " id="category" name="category">
        {{--  <option disabled selected>--selected--</option>  --}}
        @foreach ($categories as $category)
          <option  {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      @error('category')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  
    </div>
  </div>
  <div class="form-group mx-2 mt-2">
    <label for="tags">Tags</label>
    <select class="form-control select2" id="tags" name="tags[]" multiple="multiple">
      {{--  <option disabled selected>--selected--</option>  --}}
      @foreach ($post->tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
      @foreach ($tags as $tag)
        <option  value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
    @error('tags')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
    <div class="form-group mx-2">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control @error ('body') is-invalid @enderror" >{{ old('body') ?? $post->body }}</textarea>
    </div>
    @error('body')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary my-2 mx-2">{{ $add ?? 'Update' }}</button>
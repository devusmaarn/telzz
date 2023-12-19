@props(['name', 'label', 'type' => 'text'])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text font-medium">{{$label}}</span>
    </div>
    <input type="{{$type}}" name="{{$name}}" {{$attributes}} 
        class="input input-bordered w-full @error($name) input-error @enderror" />
    @error($name)
        <div class="label">
            <span class="label-text-alt text-error">{{$message}}</span>
        </div>
    @enderror
</label>
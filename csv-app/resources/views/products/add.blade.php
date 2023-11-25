<form method="POST">
    @csrf
    @method('POST')
    @if($errors->has('name'))
        <p style="color: red;">{{$errors->first('name')}}</p>
    @endif
    <input type="text" name="name" placeholder="termék neve"/><br/>
    @if($errors->has('price'))
    <p style="color: red;">{{$errors->first('price')}}</p>
    @endif
    <input type="number" name="price" placeholder="termék ára"/><br/>
    <button type="submit">Mentés</button>
</form>

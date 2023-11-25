<form method="POST">
    @csrf
    @method('POST')
    <input type="text" name="name" placeholder="termék neve"><br/>
    <input type="number" name="price" placeholder="termék ára"><br/>
    <button type="submit">Mentés</button>
</form>

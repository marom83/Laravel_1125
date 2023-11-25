<form method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <input type="file" name="file" accept=".csv"/>
    <button type="submit">Importálás</button>
</form>

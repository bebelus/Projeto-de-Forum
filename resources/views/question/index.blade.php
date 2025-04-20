<h1>Teste</h1>

<form action="{{ route('question.store') }}" method="POST">
    @csrf
    <input type="text" name="suject"><br>
    <textarea name="text" id="" cols="30" rows="10"></textarea><br>
    <select name="category" id="">
        @foreach ($categories as $category) 
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    <button type="submit">Enviar</button>
</form>
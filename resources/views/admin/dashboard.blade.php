@extends("layouts.admin")
@section("admin-page")
    <div class="container mt-3">
        <h2>Gestion des articles</h2>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Categorie</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articles as $article)
    <tr>
        <td>{{ $article['id'] }}</td>
        <td>{{ $article['title'] }}</td>
        <td>{{ $article['author'] }}</td>
        <td>
            <span class="badge bg-primary">
                {{ $article['category'] }}</td>
            </span>
        <td>{{ $article['published_at'] }}</td>
        <td>
            <a href="" class="btn bg-info btn-sm">
                Voir
            </a>
            <a href="" class="btn bg-warning btn-sm">
                Modifier
            </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection
<form class="d-flex" role="search" action="/search" method="post">
  <input class="form-control me-2" name="number" type="search" placeholder="Номер карточки" aria-label="Search" value="{{$searchNumber}}">
  <button class="btn btn-outline-success" type="submit">Найти</button>
  @csrf
</form>

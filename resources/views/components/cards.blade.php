<div class="d-flex flex-wrap gap-3 justify-content-around mb-3" style="gap: 10px">
  @each('components.card-item', $cards, 'card', 'raw|карточек нет...')
</div>
{{ $cards->links() }}

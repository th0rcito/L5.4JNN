<p>
  {{link_to_action('PizzaController@create','Crear Pizza',
    [],[])}} || 
  {{link_to_action('PizzaController@index','Mis Pizzas',
    [],[])}}

  @if (auth()->user()->role_id === 1)
    || {{ link_to_route('admin.panel','Administracion',[]) }}
  @endif
</p>

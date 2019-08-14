<style>
.header{
    position: sticky;
    top:0;
}
.footer{
    position: sticky;
    bottom:0px;
}
</style>

<header class="header">
    <h1>HEADER</h1>
</header>

<ul>
    @foreach($products as $product)
<li>{{$product ->product_type}}</li>
<img src="{{$product->img}}" alt="one_ring" srcset="">
@endforeach
</ul>

<footer>
    <h1 class="footer">FOOTER</h1>
</footer>



<style>
    .header{
        position: sticky;
        top:0;
    }
    .footer{
        position: sticky;
        bottom:0px;
    }
    div{
        display: inline-block;
        flex-direction: column;
        margin:20px;
        padding: 5px;
    }
    </style>

    <header class="header">
        <h1>HEADER</h1>
    </header>


    @foreach($products as $product)
    <div>
    <h3><strong><a href="#">{{$product->product_name}}</a></strong></h3>
        <img src="{{$product->img}}" alt="one_ring" srcset="" height="100px" width="100px">
        <p>{{$product ->product_type}}</p>
    </div>
    @endforeach


    <footer>
        <h1 class="footer">FOOTER!!</h1>
        <p><img src="..\public\uploads\folder_1\folder_2\948ce199cb9d3734a909c963717effae.jpg" alt="gg"></p>
    </footer>

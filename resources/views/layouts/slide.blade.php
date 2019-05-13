<div class="slideshow col-01">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php $a = 0; ?>
                @foreach($slide as $sl)
                    <li data-target="#demo" data-slide-to="{{$a}}"
                    @if($a == 0) class="active" @endif ></li>
                    <?php $a++; ?>
                @endforeach
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php $a=0; ?>
                @foreach($slide as $sl)
                    <div
                    @if($a == 0)
                        class="carousel-item active"
                    @else class="carousel-item"
                    @endif>
                    <?php $a++ ?>
                        <img style="height: 500px" src="upload/slide/{{$sl->image}}" alt="{{$sl->NoiDung}}">
                        <div class="carousel-caption">
                            <h1>GARDEN SPRING</h1>
                            <input type="submit" name="buy_01" value="BUY NOW">
                        </div>
                    </div>
                @endforeach                
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
<?php
    $categories = Category::tree("product");
?>
<div class="col-md-3 col-sm-4">
    @foreach($categories as $category)
        <div class="category">
            <h2 class="category-title">{{$category->name}}
            </h2>

            <ul class="category-product">
                @foreach($category['children'] as $category_child)
                <li>
                    <a href="{{URL::to('danh-muc/'.$category_child->id)}}">{{$category_child->name}}
                    </a>
                    @if(count($category_child['children'])>0)
                        <ul>
                            @foreach($category_child['children'] as $category_child_2)
                            <li>
                                <a href="{{URL::to('danh-muc/'.$category_child_2->id)}}">{{$category_child_2->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    <div class="thong-ke">
        <h2>Hổ trợ trực tuyến</h2>
        {{app('block_html')['ho_tro_truc_tuyen']}}
    </div>
</div>
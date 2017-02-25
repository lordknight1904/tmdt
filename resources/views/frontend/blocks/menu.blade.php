
<div class="navbar-collapse collapse">
<!-- Left nav -->
  <ul class="nav navbar-nav">
    <li><a href="{!! url('/') !!}" style="font: 18px tahoma, sans-serif;">Trang chủ</a></li>
    <?php 
      $nhom =  DB::table('nhom')->get();
     ?>
    @foreach ($nhom as $menu_1)
    <li><a href="{!! url('nhom',$menu_1->nhom_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_1->nhom_ten !!}</a>
      <?php 
          $loaisp = DB::table('loaisanpham')->where('nhom_id',$menu_1->id)->get();
       ?>
      <ul class="dropdown-menu">
      @foreach ($loaisp as $menu_2)
         <li><a href="{!! url('loai-san-pham',$menu_2->loaisanpham_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_2->loaisanpham_ten !!}</a></li>             
      @endforeach                             
      </ul>
    </li>
    @endforeach
  </ul>
</div>
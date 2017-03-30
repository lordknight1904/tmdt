@extends('frontend.master')
@section('content')
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <ol class="breadcrumb">
          <li><a href="{!! url('/') !!}">Home</a></li>     
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- product category -->
  <section id="aa-product-category">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center" align="center">
                    <th class="col-lg-1">Id</th>
                    <th class="col-lg-1">Người nhận</th>
                    <th class="col-lg-1">Email</th>
                    <th class="col-lg-1">Số điện thoại</th>
                    <th class="col-lg-1">Địa chỉ</th>
                    <th class="col-lg-1">Ghi chú</th>
                    <th class="col-lg-1">Tình trạng</th>
                    <th class="col-lg-1">Sản phẩm</th>
                    <th class="col-lg-1">Ảnh</th>
                    <th class="col-lg-1">Số lượng</th>
                    <th class="col-lg-1">Đơn vị</th>
                    <th class="col-lg-1">Kích cỡ</th>
                    <th class="col-lg-1">Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($info as $item)
                    <tr class="odd gradeX">
                        <td>{!! $item->id!!}</td>
                        <td>{!! $item->donhang_nguoi_nhan !!}</td>
                        <td>{!! $item->donhang_nguoi_nhan_email !!}</td>
                        <td>{!! $item->donhang_nguoi_nhan_sdt !!}</td>
                        <td>{!! $item->donhang_nguoi_nhan_dia_chi !!}</td>
                        <td>{!! $item->donhang_ghi_chu !!}</td>
                        <td>{!! $item->tinhtranghd_ten !!}</td>
                        <td>{!! $item->sanpham_ten !!}</td>
                        <td>
                            <a class="aa-product-img"><img src="{!! asset('resources/upload/sanpham/'.$item->sanpham_anh) !!}"  style="max-width: 75px; max-height: 150px;"></a>
                        </td>
                        <td>{!! $item->chitietdonhang_so_luong !!}</td>
                        <td>{!! $item->donvitinh_ten !!}</td>
                        <td>{!! $item->size_ten !!}</td>
                        <td>{!! $item->donhang_tong_tien !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </section>
  <!-- / product category -->
  <!-- Footer -->
@include('frontend.blocks.footer')
<!-- / Footer -->
@stop

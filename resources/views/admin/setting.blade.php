@extends('layouts.app2')

@section('content')
<div class="user-list-part">
  <div class="row mt-90">
    <div class="col-12">
      <label>Search : </label>
      <input type="text" class="search-part">
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table id="user_tbl" class="table table-hover">
        <thead>
          <tr>
            <th class="th-other">No</th>
            <th class="th-account">Name</th>
            <th class="th-other">Email</th>
            <th class="th-other">PhoneNumber</th>
            <th class="th-other">Permission</th>
            <th class="th-other">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td><span>{{ $user->id }}</span></td>
              <td>
                <div class="row">
                  <div class="col">
                    <img src="{{ url('public/images/avatar' ) }}/{{ $user->portfolio }}" class="img-circle img-avatar">
                    <span>{{ $user->name }}</span>
                  </div>
                </div>
              </td>
              <td><span>{{ $user->email }}</span></td>
              <td><span>{{ $user->phone_number }}</span></td>
              <td>
                @if ($user->role == 0) <span>Admin</span>
                @elseif ($user->role == 1) <span>Delivery Man</span>
                @else ($user->role == 2) <span>Customer</span>
                @endif
              </td>
              <td>
                <div class="row">
                  <div class="col">
                  @if ($user->role != 0)
                    <span class="float-left ml-3 content-span" onclick="edit_data({{ $user->id }})"><i class="fa fa-edit"></i></span>
                    <span class="float-left ml-3 content-span" onclick="delete_data({{ $user->id }})"><i class="fa fa-trash"></i></span>
                  @endif
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th class="tf-other"></th>
            <th class="tf-total"></th>
            <th class="tf-total tf-delivery">Delivery Man : 0</th>
            <th class="tf-total tf-customer">Customer : 0</th>
            <th class="tf-total"></th>
            <th class="tf-other"></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- <div class="row mt-2">
  <div class="col text-center page-btn-area">
    <span class="prev-page">BACK</span>
    <span class="cur-page">Step 2 of 3</span>
    <span class="next-page">NEXT STEP</span>
  </div>
</div> -->

<!-- Modal -->
<div id="edit_data_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Permission</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- form start -->
        <form role="form" action="#" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <input type="hidden" name="hidden_id" id="hidden_id">
            <div class="form-group">
              <label for="permission">Permission </label>
              <select class="form-control">
                <option value="1">Delivery Man</option>
                <option value="2">Customer</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
  $(function () {
    var table = $('#user_tbl').DataTable({
      "columnDefs": [ {
        "targets": 5,
        "orderable": false
      }, {
        "targets": 0,
        "orderable": false
      } ],
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "pageLength": 3
    });

    $("#user_tbl_paginate").show();
    $("#user_tbl_filter").hide();

    function pageinfo() {
      var info = table.page.info();
 
      // $('.cur-page').html(
      //   'Step '+(info.page+1)+' of '+info.pages
      // );
      
      $('.tf-post').html(table.$('tr', {"filter":"applied"}).length + ' Posts');

      var delivery = 0;
      var customer = 0;
      table.rows({ search: 'applied' }).iterator( 'row', function ( context, index ) {
        var tmp = $( this.cell( index, 4 ).nodes() ).find('span').text();
        if(tmp == "Delivery Man") delivery++;
        else if(tmp == "Customer") customer++;
      });

      $('.tf-delivery').html("Delivery Man : " + delivery);
      $('.tf-customer').html("Customer : " + customer);
    }

    pageinfo();

    $('.search-part').on( 'keyup', function () {
      table.search( this.value ).draw();
      pageinfo();
    });

    // $('.next-page').on( 'click', function () {
    //   table.page( 'next' ).draw( 'page' );
    //   pageinfo();
    // });
    
    // $('.prev-page').on( 'click', function () {
    //   table.page( 'previous' ).draw( 'page' );
    //   pageinfo();
    // });

    function edit_data(row_id) {
      console.log("row id = " + row_id);
      $("#edit_data_modal").modal();
    }

    function delete_data(row_id) {

    }

  });

  function edit_data(row_id) {
    console.log("row id = " + row_id);
    $("#edit_data_modal").modal();
  }
</script>

@endsection
@include('backend.head.index')
<div class="content-wrapper">
   <section class="content">
      <div class="row">
       
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên menu</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                
               	<div class="form-group">
	                <label>Lựa chọn menu cha</label>
	                <select class="form-control select2" style="width: 100%;">
	                  <option selected="selected">Alabama</option>
	                  <option>Alaska</option>
	                  <option disabled="disabled">California (disabled)</option>
	                  <option>Delaware</option>
	                  <option>Tennessee</option>
	                  <option>Texas</option>
	                  <option>Washington</option>
	                </select>
              	</div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
</div>

@include('backend.head.footer')
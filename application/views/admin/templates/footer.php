
                                      
                                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                           
                        </div>
                    </div>
                    <!-- Main-body end -->
                    
                    <!--<div id="styleSelector">
                        
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- faq delete confirmation modal -->
      <div class="modal fade" id="Delete_Log" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="z-index: 10000 !important;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Delete Faq</span> ?</h4>
      </div>
      <div class="modal-body">
        Do you want to delete selected Faq ?<br/>
        This Process cannot be Rolled Back
      </div>
        <form name="frm_delete_sale" id="frm_delete_sale" action="<?php echo base_url(); ?>admin/home/faq_delete/" method="POST">
          <input type="hidden" name="faq_id" id="faq_id" value=""/>
          <div class="modal-footer">
            <button type="submit" name="btn_delete_faq" id="btn_delete_faq" value="Delete" class="btn btn-danger btn-flat">Delete</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Required Jquery -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="<?php echo base_url();?>assets/files/assets/pages/waves/js/waves.min.js"></script>
<!-- j-pro js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/j-pro/js/jquery.j-pro.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Custom js -->
<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/j-pro/js/custom/form-job.js"></script> -->

<!-- Bootstrap date-time-picker js -->
<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/advance-elements/moment-with-locales.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script> -->
<!-- Date-range picker js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>
<!-- Date-dropper js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/datedropper/js/datedropper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/spectrum/js/spectrum.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/jscolor/js/jscolor.js"></script>
<!-- Mini-color js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/bower_components/jquery-minicolors/js/jquery.minicolors.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/pages/advance-elements/custom-picker.js"></script>


<!--sarath data tables-->
<!-- data-table js -->
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url();?>assets/files/assets/pages/data-table/js/data-table-custom.js"></script>

<!--close sarath data tables-->
<script src="<?php echo base_url();?>assets/files/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url();?>assets/files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?php echo base_url();?>assets/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/files/assets/js/script.js"></script>
<!--<script src="<?php echo base_url();?>assets/files/assets/js/select2.full.min.js"></script>-->
<script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-switch.js"></script>

<!---add more branch------>
<script type="text/javascript">

    $(document).ready(function(){
        $('.add_button').click(function() {
            //alert("hai");
            var maxField = 10;
            var x = 1;

            $.ajax({
               type: "POST",
               url: "add_branch",
               success: function(html) 
               {
                   var response=JSON.parse(html);  
                   $('.wrappers').append(response['fieldHTML']);
               }
            });
            
        }); 

    });
</script>
<!---close add more branch-->
<!-- status change-->
<script type="text/javascript">
$(document).ready(function()
{
  $("[name='status-change']").bootstrapSwitch();
  $('input[name="status-change"]').on('switchChange.bootstrapSwitch', function(event, state) {
  var this_=$(this);
  var id=$(this).data('id');
  var status=$(this).data('status');

  $.ajax({
    type: 'POST',
    url: '<?php echo base_url('index.php/admin/home/faq_status/'); ?>',
    beforeSend: function(){$('input[name="status-change"]').bootstrapSwitch('toggleDisabled', true, true);},
    //complete: function(){},
    data: {id: id,status: status},
    success: function(html)
    {
        $('input[name="status-change"]').bootstrapSwitch('toggleDisabled', false, false);
    }
    });
  });

});

</script>
</script>
<script src="<?php echo base_url();?>assets/js/select2.full.min.js"></script>
<script>
$('.delete_option').click(function()
{
$('#faq_id').val($(this).data('id'));
});
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    CKEDITOR.replace('editor1');
  });
</script>

</body>

</html>
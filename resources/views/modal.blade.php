
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ดาวน์โหลด แคตตาล็อก {{ $objs->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form class="ps-form--contact-us" id="get_my_category">
                    <h4>กรอกข้อมูลก่อน ดาวน์โหลด แคตตาล็อก</h4>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" id="modal_name" name="modal_name" placeholder="ชื่อผู้ติดต่อ *">
                                <input type="hidden" id="modal_id" name="modal_id" value="{{ $objs->id }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" id="modal_phone" name="modal_phone" placeholder="เบอร์โทรติดต่อ *">
                            </div>
                        </div>
                        
                    </div>
                   
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <a type="button" data-key="ยืนยัน" class="btn btn-primary send_download_category" style="color:#fff">ดาวน์โหลด</a>
      </div>
    </div>
  </div>

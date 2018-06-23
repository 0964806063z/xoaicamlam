<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="contactform" name="contactform" method="post"  class="text-left" data-parsley-validate>
                <div class="container-fluid">
                    <div class="row">
                    <label for="name"><i class="fas fa-user fa-1.5x"></i> Tên</label>
                    <input type="text" name="name" id="name" class="txt1 form-control" tabindex="1" placeholder="Your name" required="">
                    </div>
                
                    <div class="row">
                    <label for="email"><i class="fas fa-1.5x fa-envelope" fa-2x></i> E-mail</label>
                    <input type="email" name="email" class="txt1 form-control" tabindex="2" placeholder="EX: abc@gmail.com" data-parsley-trigger="change" >
                    </div>
                
                    <div class="row">
                    <label for="phone"><i class="fas fa-phone fa-1.5x"></i> Số điện thoại:</label>
                    <input name="phone" id="number" class="txt1 form-control" tabindex="3" placeholder="Phone number " type="text" data-parsley-required  autocomplete="off" required>
                    </div>
                
                    <div class="row">
                    <label for="message"><i class="fas fa-pencil-alt fa-1.5x"></i>Tin nhắn</label>
                    <textarea name="message" id="message" class="txtarea form-control" tabindex="4" data-parsley-trigger="keyup"  data-parsley-minlength="15" data-parsley-minlength-message="Come on! You need to enter at least a 15 character comment.." ></textarea>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </form>
        </div> 
      </div>
    </div>
  </div>
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>
              <h3 class="box-title">Chat</h3>
              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle" >
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                {!! HTML::image('http://placehold.it/128x128', 'User Image', array('class' => 'online', 'draggable' => 'false')) !!}
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
                <div class="attachment">
                  <h4>Attachments:</h4>
                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>
                  <div class="pull-right">
                    <button class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div><!-- /.attachment -->
              </div><!-- /.item -->
              <!-- chat item -->
              <div class="item">
                {!! HTML::image('http://placehold.it/128x128', 'User Image', array('class' => 'offline', 'draggable' => 'false')) !!}
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                    Jeremy Kenedy
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div><!-- /.item -->
              <!-- chat item -->
              <div class="item">
                {!! HTML::image('http://placehold.it/128x128', 'User Image', array('class' => 'offline', 'draggable' => 'false')) !!}
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                    Susan Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div><!-- /.item -->
            </div><!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">
                <div class="input-group-btn">
                  <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div><!-- /.box (chat box) -->
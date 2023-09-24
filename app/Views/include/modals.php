<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <br>
              <?php foreach($playlists as $plays):?>
              <a href="/playlist/"><?= $plays['playlistName'] ?></a>
              <br>
                <?php endforeach;?>

        </div>
        <div class="modal-footer">
          <a href="#myModal" data-bs-dismiss="modal">Close</a>
          <a href="#" data-bs-toggle="modal" data-bs-target="#createPlaylist">Create New</a>

        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select from playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/edit" method="post">
            <!-- <p id="modalData"></p> -->
              <input type="hidden" name="musicID" value="musicID">
            <select  name="playlist" class="form-control" >
              <?php foreach($playlists as $play):?>
              <option value="<?=$play['id']?>"><?=$play['playlistName']?></option>
                <?php endforeach;?>
            </select>
            <input type="submit" name="add">
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



    <!-- create playlist modal-->
    <div class="modal" id="createPlaylist">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create Playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/savePlaylist" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="text" id="" name="playlistName">
            <button type="Submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

     <!-- create music modal-->
     <div class="modal" id="addMusic">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add Music</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="<?= base_url('saveMusic')?>" method="post" enctype="multipart/form-data">
            <!-- <p id="modalData"></p> -->
            <input type="file" id="" name="music">
            <button type="Submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
<form action="/search" method="get">
    <input type="search" name="search" placeholder="search song">
    <button type="submit" class="btn btn-primary">search</button>
  </form>
  <h1>Music Player</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  My Playlist
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMusic">
  Add Music
</button>

    <audio id="audio" controls autoplay></audio>
    <ul id="playlist">
        <?php foreach($music as $mus):?>
          <input type="hidden" name="<?= $mus['musicID']?>" id="<?= $mus['musicID']?>">
        <li data-src="/public/<?= $mus['music']?>"> <?= $mus['music']?>  <button type="button"value="<?= $mus['musicID']?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">+</button>
        </li>
          <?php endforeach;?>
    </ul>
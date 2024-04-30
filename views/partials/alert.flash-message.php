<div class="<?= checkFlashMsgType($flashMessage['type']) ?> flex items-center justify-between rounded-lg p-4 mb-4 mx-auto shadow-md text-sm max-w-xl" id="flash-msg">
  <h2 class="flex items-center space-x-2">
    <i class="<?= checkFlashMsgIcon($flashMessage['type']) ?> uil text-xl"></i>
    <span><?= $flashMessage['message'] ?></span>
  </h2>
  <button onclick="closeFlashMsg()">
    <i class="uil uil-times text-xl"></i>
  </button>
</div>
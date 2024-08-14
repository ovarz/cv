<div class="table-default-foot">
  <div class="tdf-left">
    <div class="tdf-box tdf-pagination">
      <div class="tdf-pagination-label">Show</div>
      <div class="tdf-pagination-choose">
        <select class="formbase-field tdf-pagination-select">
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
      </div>
      <div class="tdf-pagination-label">Entries</div>
    </div>
  </div>
  <div class="tdf-right">
    <div class="tdf-box tdf-pagination">
      <div class="tdf-pagination-info">Page 1/100</div>
      <button title="Previous" class="btn tdf-button">
        <?php require ($_SERVER['FIERSA'].'img/icon/left.svg')?>
      </button>
      <div class="tdf-pagination-choose">
        <input type="text" class="formbase-field tdf-pagination-jump" value="1" />
      </div>
      <button title="Next" class="btn tdf-button">
        <?php require ($_SERVER['FIERSA'].'img/icon/right.svg')?>
      </button>
    </div>
  </div>
</div>
<style>
    .pagination ul li {
        padding: 7px;
        margin-top: 10px;
        background: white;
        border-radius: 5px;
    }

    .pagination ul li.active {
        border: solid 1px #074093;
        padding: 7px;
        margin-top: 10px;
        background: #0a58ca;
        border-radius: 5px;
    }

    .pagination ul li.active a {
        color: white !important;
    }
</style>

<div class="row wow fadeIn" data-wow-delay="200ms">
    <div class="col-sm-12">
        <div class="text-center mt-2-6 mt-lg-6">
            <div class="pagination">
                <ul class="pagination">
                    <?= $this->Paginator->prev('' . __('<span aria-hidden="true">&laquo;</span>'), ['escape' => false]) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('<span aria-hidden="true">&raquo;</span>') . '', ['escape' => false]) ?>
                </ul>
            </div>
        </div>
    </div>
</div>
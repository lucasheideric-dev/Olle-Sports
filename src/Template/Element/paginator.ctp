<div class="row wow fadeIn" data-wow-delay="200ms">
    <div class="col-sm-12">
        <div class="text-center mt-2-6 mt-lg-6">
            <div class="pagination">
                <ul class="pagination">
                    <?= $this->Paginator->prev('' . __('<span aria-hidden="true">&laquo;</span>'), ['escape' => false]) ?>
                    <?= $this->Paginator->numbers(['before' => '', 'after' => '', 'modulus' => 6]) ?>
                    <?= $this->Paginator->next(__('<span aria-hidden="true">&raquo;</span>') . '', ['escape' => false]) ?>
                </ul>
            </div>
        </div>
    </div>
</div>

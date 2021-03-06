<p>&nbsp;</p>
<h4>文章管理</h4>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="paging"><?php echo $this->element('paginator'); ?></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('title'); ?></th>
                                <th><?php echo $this->Paginator->sort('date_published'); ?></th>
                                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articles as $article): ?>
                                <tr>
                                    <td><?php
                                        if (!empty($article['Article']['url'])) {
                                            echo $this->Html->link($article['Article']['title'], $article['Article']['url'], array('target' => '_blank'));
                                        } else {
                                            echo h($article['Article']['title']);
                                        }
                                        ?>&nbsp;</td>
                                    <td><?php echo h($article['Article']['date_published']); ?>&nbsp;</td>
                                    <td><?php echo h($article['Article']['modified']); ?>&nbsp;</td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id']), array('class' => 'btn btn-default')); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), array('class' => 'btn btn-default'), __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paging"><?php echo $this->element('paginator'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

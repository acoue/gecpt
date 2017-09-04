<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('discipline_id','Discipline') ?></th>
			                <th><?= $this->Paginator->sort('name','Libellé') ?></th>
			                <th><?= $this->Paginator->sort('categorie_id','Catégorie') ?></th>
			                <th><?= $this->Paginator->sort('date_competition','Date') ?></th>
			                <th><?= $this->Paginator->sort('lieux','Lieux') ?></th>
			                <th><?= $this->Paginator->sort('type','Type') ?></th>
			                <th><?= $this->Paginator->sort('archive','Archivé ?') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($competitions as $competition): ?>
				        <tr>
			                <td><?= h($competition->discipline->name) ?></td>
			                <td><?= h($competition->name) ?></td>
			                <td><?= h($competition->category->name) ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($competition->date_competition) ?></td>
			                <td><?= h($competition->lieux) ?></td>
			                <td><?= ($competition->type == 0) ? "Individuelle" : "Equipe"; ?></td>
			                <td><?= ($competition->archive == 0) ? "Non" : "Oui"; ?></td>
			               <td class="actions">
								<?= $this->Html->link(__('Voir'), ['action' => 'view', $competition->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $competition->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $competition->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer la compétition {0}?', $competition->name)]) ?>
			                </td>
				        </tr>
				
				    <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
		<p align="center">
			<?= $this->Html->link(__('Créer une compétition'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
			<?= $this->Html->link(__('Retour'), ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-info']) ?> 
			
		</p>
					<div class="paginator">
				        <ul class="pagination">
				            <?= $this->Paginator->prev('< ' . __('Préc.')) ?>
				            <?= $this->Paginator->numbers() ?>
				            <?= $this->Paginator->next(__('Suiv.') . ' >') ?>
				        </ul>
				        <p><?= $this->Paginator->counter() ?></p>
				    </div>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
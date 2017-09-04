<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition - Edition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $competition->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer la compétition {0} ?', $competition->name)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create($competition, ['id'=>'formulaire']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="discipline_id">Discipline</label>
                    <div class="col-md-12"><?= $this->Form->input('discipline_id', ['label' => false,'id'=>'discipline_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $disciplines, 
                    										'value' => $competition->discipline_id]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($competition->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="date_competition">Date de compétition <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-14"><?= $this->Form->input('date_competition', ['label' => false,'id'=>'date_competition',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => FonctionUtilitaire::dateFromMySQL($competition->date_competition),
															'required' =>'required']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-md-8 control-label" for="lieux">Lieux <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('lieux', ['label' => false,'id'=>'lieux',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($competition->lieux)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="description">Description</label>
                    <div class="col-md-14"><?= $this->Form->input('description', ['label' => false,'id'=>'description',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'textarea', 
                    										'value' => h($competition->description)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="catagorie_id">Catégorie <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-12"><?= $this->Form->input('catagorie_id', ['label' => false,'id'=>'catagorie_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options'=>$categories, 
                    										'value' => h($competition->catagorie_id),
															'required' =>'required']); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="region_id">Régions</label>
                	<div class="col-lg-12"><?= $this->Form->input('region_id', ['label' => false,
                											'options' => $regions,'value'=>h($competition->region_id),
                											'div' => false,
															'class' => 'form-control', 
                    										'required' =>'required']) ?>    
                	</div>                 
				</div><br />   
				<div class="row">
                	<label class="col-lg-8 control-label" for="type">Type <span class="obligatoire"> *</span></label>
                	<div class="col-lg-12"><?= $this->Form->input('type', ['label' => false,
                											'options' => [0 => 'Individuelle', 1=>'Equipe'],
                											'div' => false,'value'=>$competition->type,
															'class' => 'form-control', 
                    										'required' =>'required']) ?>    
                	</div>                 
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="archive">Archivée</label>
                	<div class="col-lg-10"><?= $this->Form->input('archive', ['label' => false,
                											'options' => [0 => 'Non', 1=>'Oui'],
                											'div' => false,'value'=>$competition->archive,
															'class' => 'form-control']) ?>    
                	</div>                 
				</div><br /> 
				<div class="row">
					<?= $this->Form->button('Valider', ['type' => 'submit','class' => 'btn btn-default']) ?>
					<?= $this->Form->end() ?>
			    </div>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
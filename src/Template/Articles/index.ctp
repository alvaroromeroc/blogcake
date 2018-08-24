<h1>Artículos</h1>
<?= $this->Html->link(
    'Añadir artículo',
    ['controller' => 'Articles', 'action' => 'add']
) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Aquí es donde iteramos nuestro objeto de consulta $articles, mostrando en pantalla la información del artículo -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title,
            ['controller' => 'Articles', 'action' => 'view', $article->id]) ?>
        </td>
        <td><?= $article->created->format(DATE_RFC850) ?></td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?>
            <?= $this->Form->postLink(
                'Eliminar',
                ['action' => 'delete', $article->id],
                ['confirm' => '¿Estás seguro?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
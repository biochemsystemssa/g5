@extends('layout.app')
@section('content')
<div class="form-group row add">

    <div class="page-header">
        <h1>Listar ctb_reservacfdi</h1>
    </div>
    <div class="col-md-12">
        <div class="text-right">
            <button type="button" data-toggle="modal" data-target="#create-item" class="btn btn-primary">
                <i class="fa fa-plus" aria-hidden="true"></i> Crear
            </button>
        </div>
    </div>
</div>

<style>
    .panel-default-transparente{
        background: rgba(255,254,240,0.3);
        border: 0px;

    }

    .well{
        background: rgba(34,34,34,0.2);
        border: 1px solid rgba(245,245,245,0.2);

    }

    li {
        list-style-type: none
    }

    .table-borderless > tbody > tr > td,
    .table-borderless > tbody > tr > th,
    .table-borderless > tfoot > tr > td,
    .table-borderless > tfoot > tr > th,
    .table-borderless > thead > tr > td,
    .table-borderless > thead > tr > th {
        border: none;
    }
</style>

<div class="row">
    <div class="panel panel-default-transparente">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr style="background: rgba(245,245,245,0.5);border: 0px">
                        <th>id_impuesto</th>
                        <th>descripcion</th>
                        <th>porcentaje</th>
                        <th>impuesto</th>
                        <th>Actions</th>
                    </tr>
                    <tr v-for="item in items">
                        <td>@{{ item.id_impuesto }}</td>
                        <td>@{{ item.descripcion }}</td>
                        <td>@{{ item.porcentaje }}</td>
                        <td>@{{ item.impuesto }}</td>
                        <td>
                            <button class="edit-modal btn btn-warning btn-sm" @click.prevent="editItem(item)">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>
                            <button class="edit-modal btn btn-danger btn-sm" @click.prevent="deleteItem(item)">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <nav>
        <ul class="pagination">
            <li v-if="pagination.current_page > 1">
                <a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                <a href="#" @click.prevent="changePage(page)">
                    @{{ page }}
                </a>
            </li>
            <li v-if="pagination.current_page < pagination.last_page">
                <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
</div>


<!-- Create Item Modal -->
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create New Post</h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" v-on:submit.prevent="createItem">
                    <div class="form-group">

                        <label for="id_reserva">id_reserva:</label>
                        <select class="form-control" name="id_reserva" v-model="newItem.id_reserva">
                            <option selected> Selecciona</option>
                            <?php foreach ($data['ctb_reserva_cfdi'] as $fila) { ?>
                                <option value="<?= $fila->id_reserva ?>"> <?= $fila->id_reserva ?></option>
                            <?php } ?>
                        </select>
                        <span v-if="formErrors['id_reserva']" class="error text-danger">
                            @{{ formErrors['id_reserva'] }}
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="descripcion">descripcion:</label>
                        <input type="text" name="descripcion" class="form-control" v-model="newItem.descripcion" />
                        <span v-if="formErrors['descripcion']" class="error text-danger">
                            @{{ formErrors['descripcion'] }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="porcentaje">porcentaje:</label>
                        <input type="text" name="porcentaje" class="form-control" v-model="newItem.porcentaje" />
                        <span v-if="formErrors['porcentaje']" class="error text-danger">
                            @{{ formErrors['porcentaje'] }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="impuesto">impuesto:</label>
                        <input type="text" name="impuesto" class="form-control" v-model="newItem.impuesto" />
                        <span v-if="formErrors['impuesto']" class="error text-danger">
                            @{{ formErrors['impuesto'] }}
                        </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Item Modal -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" v-on:submit.prevent="updateItem(fillItem.id_impuesto)">
                    <div class="form-group">

                        <label for="id_reserva">id_reserva:</label>
                        <select class="form-control" name="id_reserva" v-model="fillItem.id_reserva">

                            <?php foreach ($data['ctb_reserva_cfdi'] as $fila) { ?>

                                <option  value="<?= $fila->id_reserva ?>"> <?= $fila->id_reserva ?></option>
            
                            <?php } ?>
                        </select>
                        <span v-if="formErrors['id_reserva']" class="error text-danger">
                            @{{ formErrors['id_reserva'] }}
                        </span>
                    </div>


                    <div class="form-group">
                        <label for="descripcion">descripcion:</label>
                        <input type="text" name="descripcion" class="form-control" v-model="fillItem.descripcion" />
                        <span v-if="formErrorsUpdate['descripcion']" class="error text-danger">
                            @{{ formErrorsUpdate['descripcion'] }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="porcentaje">porcentaje:</label>
                        <input type="text" name="porcentaje" class="form-control" v-model="fillItem.porcentaje" />
                        <span v-if="formErrorsUpdate['porcentaje']" class="error text-danger">
                            @{{ formErrorsUpdate['porcentaje'] }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="impuesto">impuesto:</label>
                        <input type="text" name="impuesto" class="form-control" v-model="fillItem.impuesto" />
                        <span v-if="formErrorsUpdate['impuesto']" class="error text-danger">
                            @{{ formErrorsUpdate['impuesto'] }}
                        </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')
<script type="text/javascript" src="{{ asset('js/ctb_reservacfdi_impuestos.js') }}"></script>
@stop
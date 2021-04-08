<?php

namespace App\View\Components;

use App\Models\Appeal;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\View\Component;
use Yajra\DataTables\DataTables;

class Promocode extends Component
{
    private $dataTables;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(DataTables $dataTables)
    {
        $this->dataTables = $dataTables;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.create-promocode');
    }

    public function ajax()
    {
        $model = Appeal::query();
        return $this->dataTables->eloquent($model)
            ->addColumn('action', function ($model) {
                $html = '<a href="" data-bs-toggle="modal" data-bs-target="#appealEditModal" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a> ';
                $html .= '<button data-rowid="'.$model->id.'" class="btn btn-xs btn-danger"><i class="far fa-trash-alt"></i></button>';
                return $html;
            })
            ->editColumn('created_at', function($model){
                return $this->getFormateDate($model->created_at);
            })
            ->editColumn('user_id', function($model){
                return $model->user->name;
            })
            ->editColumn('appeal_status', function($model){
                return $this->chekDate($model->expired);
            })
            ->toJson();
    }

    public function getFormateDate($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d H:i:s');
    }

    public function chekDate($date)
    {
        $now = Carbon::now();
        if($now > $date){
            return ['class' => 'expired', 'status' => 'Истек'];
        }
        return ['class' => 'not_used', 'status' => 'Не использован'];
    }

    public function chekAppealStatus($id)
    {
        return Appeal::findOrFail($id);
    }

}

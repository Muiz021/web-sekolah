<?php
    
    namespace App\Exports;
    
    use App\Models\Ppdb;
    use Maatwebsite\Excel\Concerns\Exportable;
    use Illuminate\Contracts\View\View;
    use Maatwebsite\Excel\Concerns\FromView;
    use Maatwebsite\Excel\Concerns\ShouldAutoSize;
    
    class SiswaExport implements FromView, ShouldAutoSize
    {
        use Exportable;
        
        public function __construct($awal, $akhir)
        {
            $this->awal = $awal;
            $this->akhir = $akhir;
        }
        
        public function view(): View
        {
            return view('admin.pages.ppdb.export', [
                'ppdbs' => Ppdb::whereBetween('created_at', [
                    $this->awal, $this->akhir,
                ])->get(),
            ]);
        }
        
    }

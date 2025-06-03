<?php
require_once('../TCPDF-main/tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genderData = json_decode($_POST['gender_data'], true);

    // 生成 PDF 文件
    ob_start();
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetFont('msungstdlight', '', 10);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->AddPage();

    $html = '<h2>使用者性別統計</h2>';

    $html .= '<table border="1">';
    $html .= '<tr><td>性別</td><td>人數</td></tr>';
    foreach ($genderData as $row) {
        $html .= '<tr><td>' . htmlspecialchars($row[0]) . '</td><td>' . htmlspecialchars($row[1]) . '</td></tr>';
    }
    $html .= '</table>';

    // 輸出 HTML 內容
    $pdf->writeHTML($html);

    // 設置 PDF 存儲路徑
    $pdf->Output('gender_data.pdf', 'D');
    ob_end_flush();
}
?>

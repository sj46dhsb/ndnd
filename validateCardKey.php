<?php
// 模拟卡密验证
$validCardKeys = [
    '1234567890', // 示例卡密1
    'abcdef1234', // 示例卡密2
    '0987654321', // 示例卡密3
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取POST请求中的卡密
    $cardKey = trim($_POST['cardKey']);

    // 检查卡密是否有效
    if (in_array($cardKey, $validCardKeys)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => '卡密无效，请重新输入!']);
    }
} else {
    echo json_encode(['success' => false, 'message' => '请求方式错误!']);
}
?>

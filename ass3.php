<?php
$students = [
    [
        'stdid' => '1',
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdid' => '2',
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdid' => '3',
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdid' => '4',
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdid' => '5',
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Ass3 </title>
  <style>
    *{box-sizing:border-box}
    body{
      margin:0; font-family:"Tahoma", system-ui, sans-serif;
      background:#f9fafb; color:#111827; line-height:1.65;
      --bg: #f9fafb;
      --text: #111827;
      --muted: #6b7280;
      --primary: #1f4fbf;
      --border: #e5e7eb;
      --card: #ffffff;
      --row: #f9f9f9;
    }
    header{
      padding:24px 16px; text-align:center;
    }
    header h1{
      margin:0; font-size:24px; font-weight:700; color:var(--text);
    }
    header p{
      margin:6px 0 0; color:var(--muted); font-size:14px;
    }

    .container{
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap:16px;
      padding: 0 16px 28px;
      max-width:1200px; margin:0 auto;
    }

    .card{
      background:var(--card);
      border:1px solid var(--border);
      border-radius:12px;
      box-shadow:0 6px 14px rgba(36,50,74,0.06);
      overflow:hidden;
      max-width: 420px;
      width:100%;
      margin:0 auto;
    }
    .card .card-head{
      display:flex; align-items:center; gap:8px;
      padding:12px 14px; background: linear-gradient(90deg,#eef4ff, #fff);
      border-bottom:1px solid var(--border);
      color:var(--primary); font-weight:700; font-size:14px;
    }
    .badge{
      background:var(--primary); color:#fff; border-radius:999px;
      font-size:12px; padding:2px 8px; display:inline-block;
    }
    .content{ padding: 10px 12px 14px; }
    .content p { margin: 4px 0; }
    .total{
      text-align:center;
      font-weight:bold;
      padding-bottom:20px;
      color:var(--muted);
    }
    @media (max-width:480px){
      header h1{ font-size:20px }
    }
  </style>
</head>
<body>

<header>
  <h1>Students Information</h1>
</header>

<div class="container">
  <?php foreach ($students as $student): ?>
    <div class="card" id="student-<?= htmlspecialchars($student['stdid']) ?>">
      <div class="card-head">
        Student No: <?= htmlspecialchars($student['stdNo']) ?>
        <span class="badge">GPA <?= htmlspecialchars(number_format($student['stdGAP'], 1)) ?></span>
      </div>
      <div class="content">
        <p><strong>ID:</strong> <?= htmlspecialchars($student['stdid']) ?></p>
        <p><strong>Name:</strong> <?= htmlspecialchars($student['stdName']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($student['stdEmail']) ?></p>
        <p><strong>GPA:</strong> <?= htmlspecialchars($student['stdGAP']) ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="total">
  Total Students: <?= count($students) ?>
</div>

</body>
</html>

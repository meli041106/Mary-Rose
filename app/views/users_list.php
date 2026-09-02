<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - LavaLust</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Georgia, 'Times New Roman', serif;
            background: #e8f1f8;
            color: #17324d;
            padding: 32px 20px;
        }
        
        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff8e8;
            padding: 36px;
            border: 1px solid #c8dce9;
            border-radius: 10px;
            box-shadow: 0 14px 32px rgba(23, 50, 77, 0.14);
        }
        
        h1 {
            color: #123f67;
            margin-bottom: 26px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 0;
        }
        
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 20px;
            overflow: hidden;
            border: 1px solid #b9d0df;
            border-radius: 8px;
            background: #fffdf6;
        }
        
        table thead {
            background-color: #155a8a;
            color: white;
        }
        
        table th {
            padding: 16px 15px;
            text-align: left;
            font-weight: bold;
            letter-spacing: 0;
        }
        
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #dce7ed;
            color: #24435d;
        }
        
        table tbody tr:hover {
            background-color: #e7f2f8;
        }
        
        table tbody tr:nth-child(even) {
            background-color: #f6edd9;
        }

        table tbody tr:last-child td {
            border-bottom: 0;
        }

        @media (max-width: 700px) {
            body {
                padding: 16px 10px;
            }

            .container {
                padding: 22px 14px;
            }

            h1 {
                font-size: 24px;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management Module</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['id'] ?? $user->id ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($user['firstname'] ?? $user->firstname ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($user['lastname'] ?? $user->lastname ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($user['email'] ?? $user->email ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($user['username'] ?? $user->username ?? ''); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center; color: #999;">No users found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

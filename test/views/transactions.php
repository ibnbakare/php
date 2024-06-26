<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- YOUR CODE -->
                <?php if( !empty($transaction)):?>
                    <?php foreach($transaction as $transactions): ?>
                        <tr>
                            <td>
                                <?= $transactions['date'] ?>
                            </td>
                            <td>
                                <?= $transactions['checkNumber'] ?>
                            </td>
                            <td>
                                <?= $transactions['description'] ?>
                            </td>
                            <td >
                                <?php if($transactions['amount'] < 0 ): ?>
                                    <span style="color: red;">
                                    <?= formatAmount($transactions['amount']) ?>
                                    </span>
                                <?php elseif($transactions['amount'] > 0): ?>
                                    <span style="color: green;">
                                    <?= formatAmount($transactions['amount']) ?>
                                    </span>
                                <?php else: ?>
                                    <?= formatAmount($transactions['amount']) ?>

                                    <?php endif ?>
                               
                            </td>
                        </tr>
                <?php endforeach ?>
                <?php endif ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>
                    <?php echo formatAmount($total["netTotal"]) ?>
                        
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td><?php echo formatAmount( $total["totalIncome"]) ?></td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td><?php echo formatAmount( $total["totalExpense"]) ?></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>

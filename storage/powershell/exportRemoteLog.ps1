$timeLimit = (Get-Date).AddMinutes(-1);
$csvPath = "C:\Temp\RDPLogs.csv"
Get-WinEvent -LogName "Microsoft-Windows-TerminalServices-RemoteConnectionManager/Operational" | Where-Object { $_.Id -eq 1149 -and $_.TimeGenerated -gt $timeLimit } | Select-Object TimeCreated, Id, Message | Export-Csv -Path $csvPath -NoTypeInformation -Encoding UTF8

#초기세팅
#Get-WinEvent -LogName "Microsoft-Windows-TerminalServices-RemoteConnectionManager/Operational" | Where-Object { $_.Id -eq 1149 } | Select-Object TimeCreated, Id, Message | Export-Csv -Path $csvPath -NoTypeInformation -Encoding UTF8

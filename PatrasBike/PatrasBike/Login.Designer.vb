<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Login
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.Label_CompanyName = New System.Windows.Forms.Label()
        Me.Label_Password = New System.Windows.Forms.Label()
        Me.TextBox1 = New System.Windows.Forms.TextBox()
        Me.MaskedTextBox1 = New System.Windows.Forms.MaskedTextBox()
        Me.LinkLabel_Forgot = New System.Windows.Forms.LinkLabel()
        Me.Button_Login = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'Label_CompanyName
        '
        Me.Label_CompanyName.AutoSize = True
        Me.Label_CompanyName.Location = New System.Drawing.Point(9, 9)
        Me.Label_CompanyName.Name = "Label_CompanyName"
        Me.Label_CompanyName.Size = New System.Drawing.Size(85, 13)
        Me.Label_CompanyName.TabIndex = 0
        Me.Label_CompanyName.Text = "Company Name:"
        '
        'Label_Password
        '
        Me.Label_Password.AutoSize = True
        Me.Label_Password.Location = New System.Drawing.Point(9, 48)
        Me.Label_Password.Name = "Label_Password"
        Me.Label_Password.Size = New System.Drawing.Size(56, 13)
        Me.Label_Password.TabIndex = 1
        Me.Label_Password.Text = "Password:"
        '
        'TextBox1
        '
        Me.TextBox1.Anchor = CType(((System.Windows.Forms.AnchorStyles.Top Or System.Windows.Forms.AnchorStyles.Left) _
            Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.TextBox1.Location = New System.Drawing.Point(12, 25)
        Me.TextBox1.Name = "TextBox1"
        Me.TextBox1.Size = New System.Drawing.Size(171, 20)
        Me.TextBox1.TabIndex = 2
        '
        'MaskedTextBox1
        '
        Me.MaskedTextBox1.Anchor = CType(((System.Windows.Forms.AnchorStyles.Top Or System.Windows.Forms.AnchorStyles.Left) _
            Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.MaskedTextBox1.Location = New System.Drawing.Point(12, 64)
        Me.MaskedTextBox1.Name = "MaskedTextBox1"
        Me.MaskedTextBox1.Size = New System.Drawing.Size(171, 20)
        Me.MaskedTextBox1.TabIndex = 3
        '
        'LinkLabel_Forgot
        '
        Me.LinkLabel_Forgot.Anchor = CType((System.Windows.Forms.AnchorStyles.Bottom Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.LinkLabel_Forgot.AutoSize = True
        Me.LinkLabel_Forgot.Location = New System.Drawing.Point(186, 87)
        Me.LinkLabel_Forgot.Name = "LinkLabel_Forgot"
        Me.LinkLabel_Forgot.Size = New System.Drawing.Size(91, 13)
        Me.LinkLabel_Forgot.TabIndex = 4
        Me.LinkLabel_Forgot.TabStop = True
        Me.LinkLabel_Forgot.Text = "Forgot password?"
        '
        'Button_Login
        '
        Me.Button_Login.Anchor = CType((System.Windows.Forms.AnchorStyles.Bottom Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.Button_Login.Location = New System.Drawing.Point(189, 62)
        Me.Button_Login.Name = "Button_Login"
        Me.Button_Login.Size = New System.Drawing.Size(88, 23)
        Me.Button_Login.TabIndex = 5
        Me.Button_Login.Text = "Login"
        Me.Button_Login.UseVisualStyleBackColor = True
        '
        'Login
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(289, 109)
        Me.Controls.Add(Me.Button_Login)
        Me.Controls.Add(Me.LinkLabel_Forgot)
        Me.Controls.Add(Me.MaskedTextBox1)
        Me.Controls.Add(Me.TextBox1)
        Me.Controls.Add(Me.Label_Password)
        Me.Controls.Add(Me.Label_CompanyName)
        Me.MaximumSize = New System.Drawing.Size(305, 148)
        Me.MinimumSize = New System.Drawing.Size(305, 148)
        Me.Name = "Login"
        Me.Text = "Login"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label_CompanyName As Label
    Friend WithEvents Label_Password As Label
    Friend WithEvents TextBox1 As TextBox
    Friend WithEvents MaskedTextBox1 As MaskedTextBox
    Friend WithEvents LinkLabel_Forgot As LinkLabel
    Friend WithEvents Button_Login As Button
End Class

<div style="padding: 40px; text-align: center;">
    <h1>Three Headings</h1>
    <div style="display: flex; flex-direction: column; gap: 20px; margin: 40px 0;">
        <a href="{{ route('heading1') }}" style="padding: 20px; font-size: 24px; text-decoration: none; color: white; background: #28a745; border-radius: 8px; transition: background 0.3s;">
            <h2>Heading 1</h2>
        </a>
        
        <a href="{{ route('heading2.form') }}" style="padding: 20px; font-size: 24px; text-decoration: none; color: white; background: #dc3545; border-radius: 8px; transition: background 0.3s;">
            <h2>Heading 2 (Age Restricted)</h2>
        </a>
        
        <a href="{{ route('heading3') }}" style="padding: 20px; font-size: 24px; text-decoration: none; color: white; background: #007bff; border-radius: 8px; transition: background 0.3s;">
            <h2>Heading 3</h2>
        </a>
    </div>
</div>

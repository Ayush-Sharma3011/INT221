<div style="padding: 40px;">
    <a href="{{ route('headings') }}" style="display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;">? Back to Headings</a>
    
    <div style="background: #d4edda; padding: 30px; border-radius: 8px; max-width: 600px; border: 2px solid #28a745;">
        <h1 style="color: #155724;">Heading 2 - Age Verified ?</h1>
        <p style="font-size: 16px; color: #155724; margin-bottom: 15px;">
            <strong>Age Verified: {{ $age }} years old</strong>
        </p>
        <p style="font-size: 18px; line-height: 1.6; color: #155724;">
            Congratulations! You have successfully verified your age and can now access this restricted content. 
            This page is only available to users who are 18 years old or older.
        </p>
    </div>
</div>

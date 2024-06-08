<table>
    <thead>
    <tr>
        <th><b>S.No</b></th>
        <th><b>Name</b></th>
        <th><b>Email</b></th>
        <th><b>Whatsapp Number</b></th>
        <th><b>Phone Number</b></th>
        <th><b>Emergency Contact Person Name</b></th>
        <th><b>Emergency Contact Number</b></th>
        <th><b>Date of Birth</b></th>
        <th><b>Blood Group</b></th>
        <th><b>City</b></th>
        <th><b>Other City</b></th>
        <th><b>Volunteer Before</b></th>
        <th><b>Volunteer Other Name</b></th>
        <th><b>Skills</b></th>
        <th><b>Available Week</b></th>
        <th><b>Image</b></th>
        <th><b>New Team Description</b></th>
        <th><b>Why Volunteer</b></th>
        <th><b>Suggesstion</b></th>
    </tr>
    </thead>
    <tbody>
        @foreach($volunteers as $key => $volunteer)
            <tr>
            
                <td>{{ $key+1 }}</td>
                <td>{{ @$volunteer->name ?? '' }}</td>
                <td>{{ @$volunteer->name ?? '' }}</td>
                <td>{{ @$volunteer->email ?? '' }}</td> 
                <td>{{ @$volunteer->whatsapp_no ?? '' }}</td> 
                <td>{{ @$volunteer->phone_no ?? '' }}</td> 
                <td>{{ @$volunteer->emergency_contact_person_name ?? '' }}</td> 
                <td>{{ @$volunteer->emergency_phone_no ?? '' }}</td> 
                <td>{{ @$volunteer->dob ?? '' }}</td> 
                <td>{{ @$volunteer->blood_group ?? '' }}</td> 
                <td>{{ @$volunteer->city ?? '' }}</td> 
                <td>{{ @$volunteer->other_city ?? '' }}</td> 
                <td>{{ @$volunteer->volunteer_before ?? '' }}</td> 
                <td>{{ @$volunteer->volunteer_other_name ?? '' }}</td> 
                <td>{{ @$volunteer->skills ?? '' }}</td> 
                <td>{{ @$volunteer->available_week ?? '' }}</td> 
                <td>{{ asset($volunteer->image) ?? '' }}</td> 
                <td>{{ @$volunteer->new_team_description ?? '' }}</td> 
                <td>{{ @$volunteer->why_volunteering_description ?? '' }}</td> 
                <td>{{ @$volunteer->suggestion_description ?? '' }}</td> 
            </tr>
        @endforeach
    </tbody>
</table>
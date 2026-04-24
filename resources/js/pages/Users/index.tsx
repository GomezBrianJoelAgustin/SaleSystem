import { Head } from '@inertiajs/react';
import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
    TableCaption,
} from '@/components/ui/table';

interface User {
    id: number;
    name: string;
    email: string;
}

export default function index({users}: {users: User[]}) {
    return (
        <>
            <Head title="Users" />
            {users.length > 0 &&(
                <Table>
                    <TableCaption>A list of users</TableCaption>
                    <TableHeader>
                        <TableRow>
                        <TableHead className="w-25">ID</TableHead>
                        <TableHead>Names</TableHead> 
                        <TableHead>Emails</TableHead>
                        <TableHead className="text-right">Role</TableHead>
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        <TableRow>
                        <TableCell className="font-medium">1</TableCell>
                        <TableCell></TableCell>
                        <TableCell></TableCell>
                        <TableCell className="text-right"></TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
            )}
        </>
    );
}

index.layout = {
    breadcrumbs: [
        {
            title: 'Users',
            href: '/users',
        },
    ],
};
